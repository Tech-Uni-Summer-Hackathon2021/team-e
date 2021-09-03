#include<stdio.h>
#include<sys/wait.h>
#include<algorithm>
#include<setjmp.h>
#include<unistd.h>

void static system_timeout(int sig);

static jmp_buf env;

int system_with_timeout(const char *cmd, int timeout){
	int rtn,status,exit_code;
	static int child_pid;
        char *cmd_for_execv[] = {"/bin/python3",NULL,NULL,NULL};
	cmd_for_execv[1] = (char *)cmd;
	if(sigsetjmp(env,1)){
		/*タイムアウト*/
	       alarm(0);
               signal(SIGALRM,SIG_DFL);
              if(child_pid>0){
		      rtn = kill(child_pid,SIGKILL);
		      fprintf(stderr,"KILLED by TIMEOUT\n");
	       }
	      return -1;
	 }

	child_pid = fork();
	switch(child_pid){
		case -1:
		    fprintf(stderr,"ERROR! fork() failed \n");
		    return -2;
		case  0:
		    /* 子プロセス */
		    rtn = execv(cmd_for_execv[0],cmd_for_execv);
		    exit(99);
		    break;
		default:
		    /*親プロセス */
		    /*アラームとシグナルハンドラをセット*/
		    alarm(timeout);
		    signal(SIGALRM,system_timeout);
		    /*子プロセスの終了を待つ*/
		    child_pid = waitpid(child_pid,&status,WUNTRACED);
		    exit_code = WEXITSTATUS(status);
	}
	/* セットしたアラームとシグナルハンドラをクリア*/
	alarm(0);
	signal(SIGALRM,SIG_DFL);
	return exit_code;

}
void static system_timeout(int sig){
	siglongjmp(env,1);
}


int main(void){
	system_with_timeout("hello.py",2);
	return 0;
}



