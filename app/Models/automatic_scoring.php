<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

use DB;

class Automatic_Scoring extends Model
{
	use HasFactory;
	protected $fillable = ['name','email','password','decision','elapsed_time','problem','language'];
	protected $table = 'users';
	protected $guarded = array('id');
	public $timestamps = true;

	public function getData99()
	{
		$name = Auth::user()->name;
		$email = Auth::user()->email;

		$data = DB::table($this->table)->orderby('problem','asc')->where('name',$name)->where('password',$email)->where('decision','AC')->distinct()->select('problem')->get();
		return $data;
	}

	public function getData11()
	{

				  	$name = Auth::user()->name;
						$email = Auth::user()->email;
		       $data = DB::table($this->table)->orderby('id','desc')->where('name',$name)->where('password',$email)->where('problem','1-1:Hello World!')->get();

		       return $data;



	}
	public function getData21()
	{
		$name = Auth::user()->name;
		$email = Auth::user()->email;


		$data = DB::table($this->table)->orderby('id','desc')->where('name',$name)->where('password',$email)->where('problem','2-1:コマンド引数')->get();
		return $data;
	}
	public function getData22()
	{
		$name = Auth::user()->name;
		$email = Auth::user()->email;

		$data = DB::table($this->table)->orderby('id','desc')->where('name',$name)->where('password',$email)->where('problem','2-2:円の面積')->get();
		return $data;
	}
	public function getData23()
	{
		$name = Auth::user()->name;
		$email = Auth::user()->email;

		$data = DB::table($this->table)->orderby('id','desc')->where('name',$name)->where('password',$email)->where('problem','2-3:今、何時')->get();
		return $data;
	}
	public function getData24()
	{
		$name = Auth::user()->name;
		$email = Auth::user()->email;

		$data = DB::table($this->table)->orderby('id','desc')->where('name',$name)->where('password',$email)->where('problem','2-4:季節を表示する')->get();
		return $data;
	}
	public function getData25()
	{
		$name = Auth::user()->name;
		$email = Auth::user()->email;
		$data = DB::table($this->table)->orderby('id','desc')->where('problem','2-5:お支払い')->where('password',$name)->where('email',$email)->get();
		return $data;
	}
	public function getData31()
	{
		$name = Auth::user()->name;
		$email = Auth::user()->email;

		$data = DB::table($this->table)->orderby('id','desc')->where('name',$name)->where('password',$email)->where('problem','3-1:ハーモニー')->get();
		return $data;
	}
	public function getData32()
	{
		$name = Auth::user()->name;
		$email = Auth::user()->email;

		$data = DB::table($this->table)->orderby('id','desc')->where('name',$name)->where('password',$email)->where('problem','3-2:図形作成')->get();
		return $data;
	}
	public function getData33()
	{
		$name = Auth::user()->name;
		$email = Auth::user()->email;

		$data = DB::table($this->table)->orderby('id','desc')->where('name',$name)->where('password',$email)->where('problem','3-3:フィボナッチ数列')->get();
		return $data;
	}
	public function getData34()
	{
		$name = Auth::user()->name;
		$email = Auth::user()->email;

		$data = DB::table($this->table)->orderby('id','desc')->where('name',$name)->where('password',$email)->where('problem','3-4:反転')->get();
		return $data;
	}
	public function getData35()
	{
		$name = Auth::user()->name;
		$email = Auth::user()->email;

		$data = DB::table($this->table)->orderby('id','desc')->where('name',$name)->where('password',$email)->where('problem','3-5:分布表')->get();
		return $data;
	}
	public function getData41()
	{
		$name = Auth::user()->name;
		$email = Auth::user()->email;

		$data = DB::table($this->table)->orderby('id','desc')->where('name',$name)->where('password',$email)->where('problem','4-1:中間地')->get();
		return $data;
	}
	public function getData42()
	{
		$name = Auth::user()->name;
		$email = Auth::user()->email;

		$data = DB::table($this->table)->orderby('id','desc')->where('name',$name)->where('password',$email)->where('problem','4-2:3の倍数')->get();
		return $data;
	}
	public function getData43()
	{
		$name = Auth::user()->name;
		$email = Auth::user()->email;

		$data = DB::table($this->table)->orderby('id','desc')->where('name',$name)->where('password',$email)->where('problem','4-3:除去')->get();
		return $data;
	}
	public function getData44()
	{
		$name = Auth::user()->name;
		$email = Auth::user()->email;

		$data = DB::table($this->table)->orderby('id','desc')->where('name',$name)->where('password',$email)->where('problem','4-4:二番目に売れた本')->get();
		return $data;
	}
	public function getData45()
	{
		$name = Auth::user()->name;
		$email = Auth::user()->email;

		$data = DB::table($this->table)->orderby('id','desc')->where('name',$name)->where('password',$email)->where('problem','4-5:回文')->get();
		return $data;
	}
	public function getData46()
	{
		$name = Auth::user()->name;
		$email = Auth::user()->email;

		$data = DB::table($this->table)->orderby('id','desc')->where('name',$name)->where('password',$email)->where('problem','4-6:数字の文字列操作')->get();
		return $data;
	}
	public function getData47()
	{
		$name = Auth::user()->name;
		$email = Auth::user()->email;

		$data= DB::table($this->table)->orderby('id','desc')->where('name',$name)->where('password',$email)->where('problem','4-7:大文字小文字')->get();
		return $data;
	}
	public function getData48()
	{
		$name = Auth::user()->name;
		$email = Auth::user()->email;

		$data= DB::table($this->table)->orderby('id','desc')->where('name',$name)->where('password',$email)->where('problem','4-8:探索')->get();
		return $data;
	}
	public function getData51()
	{
		$name = Auth::user()->name;
		$email = Auth::user()->email;

		$data= DB::table($this->table)->orderby('id','desc')->where('name',$name)->where('password',$email)->where('problem','5-1:変換')->get();
		return $data;
	}
	public function getData52()
	{
		$name = Auth::user()->name;
		$email = Auth::user()->email;

		$data= DB::table($this->table)->orderby('id','desc')->where('name',$name)->where('password',$email)->where('problem','5-2:好きな数字')->get();
		return $data;
	}
	public function getData53()
	{
		$name = Auth::user()->name;
		$email = Auth::user()->email;

		$data= DB::table($this->table)->orderby('id','desc')->where('name',$name)->where('password',$email)->where('problem','4-8:探索')->get();
		return $data;
	}
	public function getData54()
	{
		$name = Auth::user()->name;
		$email = Auth::user()->email;

		$data= DB::table($this->table)->orderby('id','desc')->where('name',$name)->where('password',$email)->where('problem','4-8:探索')->get();
		return $data;
	}


}
