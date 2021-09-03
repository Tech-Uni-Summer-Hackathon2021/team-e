<?php

namespace App\Http\Controllers;
use App\Models\automatic_scoring;

use Illuminate\Http\Request;

class SampleController extends Controller
{

  public function final(Request $request)
  {
    $user = new Automatic_Scoring();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = $request->password;
    $user->decision = $request->decision;
    $user->elapsed_time = $request->elapsed_time;
    $user->problem = $request->problem;
    $user->language = $request->language;
    $user->save();
    return view('/problems');

  }

  public function final99()
  {
    // Frameworksモデルのインスタンス化
    $md = new Automatic_Scoring();
    // データ取得
    $data = $md->getData99();

    return view('/profile', ['data' => $data]);

  }

  public function result11()
{
  // Frameworksモデルのインスタンス化
  $md = new Automatic_Scoring();
  // データ取得
  $data = $md->getData11();

  // ビューを返す
  return view('/result/result11', ['data' => $data]);
}
public function result21()
{
  // Frameworksモデルのインスタンス化
    $md = new Automatic_Scoring();
    // データ取得
    $data = $md->getData21();

  // ビューを返す
  return view('/result/result21', ['data' => $data]);
}
public function result22()
{
  // Frameworksモデルのインスタンス化
  $md = new Automatic_Scoring();
  // データ取得
  $data = $md->getData22();

  // ビューを返す
  return view('/result/result22', ['data' => $data]);
}
public function result23()
{
  // Frameworksモデルのインスタンス化
  $md = new Automatic_Scoring();
  // データ取得
  $data = $md->getData23();

  // ビューを返す
  return view('/result/result23', ['data' => $data]);
}
public function result24()
{
  // Frameworksモデルのインスタンス化
  $md = new Automatic_Scoring();
  // データ取得
  $data = $md->getData24();

  // ビューを返す
  return view('/result/result24', ['data' => $data]);
}
public function result25()
{
  // Frameworksモデルのインスタンス化
  $md = new Automatic_Scoring();
  // データ取得
  $data = $md->getData25();

  // ビューを返す
  return view('/result/result25', ['data' => $data]);
}
public function result31()
{
  // Frameworksモデルのインスタンス化
  $md = new Automatic_Scoring();
  // データ取得
  $data = $md->getData31();

  // ビューを返す
  return view('/result/result31', ['data' => $data]);
}
public function result32()
{
  // Frameworksモデルのインスタンス化
  $md = new Automatic_Scoring();
  // データ取得
  $data = $md->getData32();

  // ビューを返す
  return view('/result/result32', ['data' => $data]);
}
public function result33()
{
  // Frameworksモデルのインスタンス化
  $md = new Automatic_Scoring();
  // データ取得
  $data = $md->getData33();

  // ビューを返す
  return view('/result/result33', ['data' => $data]);
}
public function result34()
{
  // Frameworksモデルのインスタンス化
  $md = new Automatic_Scoring();
  // データ取得
  $data = $md->getData34();

  // ビューを返す
  return view('/result/result34', ['data' => $data]);
}
public function result35()
{
  // Frameworksモデルのインスタンス化
  $md = new Automatic_Scoring();
  // データ取得
  $data = $md->getData35();

  // ビューを返す
  return view('/result/result35', ['data' => $data]);
}
public function result41()
{
  // Frameworksモデルのインスタンス化
  $md = new Automatic_Scoring();
  // データ取得
  $data = $md->getData41();

  // ビューを返す
  return view('/result/result41', ['data' => $data]);
}
public function result42()
{
  // Frameworksモデルのインスタンス化
  $md = new Automatic_Scoring();
  // データ取得
  $data = $md->getData42();

  // ビューを返す
  return view('/result/result42', ['data' => $data]);
}
public function result43()
{
  // Frameworksモデルのインスタンス化
  $md = new Automatic_Scoring();
  // データ取得
  $data = $md->getData43();

  // ビューを返す
  return view('/result/result43', ['data' => $data]);
}
public function result44()
{
  // Frameworksモデルのインスタンス化
  $md = new Automatic_Scoring();
  // データ取得
  $data = $md->getData44();

  // ビューを返す
  return view('/result/result44', ['data' => $data]);
}
public function result45()
{
  // Frameworksモデルのインスタンス化
  $md = new Automatic_Scoring();
  // データ取得
  $data = $md->getData45();

  // ビューを返す
  return view('/result/result45', ['data' => $data]);
}
public function result46()
{
  // Frameworksモデルのインスタンス化
  $md = new Automatic_Scoring();
  // データ取得
  $data = $md->getData46();

  // ビューを返す
  return view('/result/result46', ['data' => $data]);
}

public function result47()
{
  // Frameworksモデルのインスタンス化
  $md = new Automatic_Scoring();
  // データ取得
  $data = $md->getData47();

  // ビューを返す
  return view('/result/result47', ['data' => $data]);
}
public function result48()
{
  // Frameworksモデルのインスタンス化
  $md = new Automatic_Scoring();
  // データ取得
  $data = $md->getData48();

  // ビューを返す
  return view('/result/result48', ['data' => $data]);
}

public function result51()
{
  // Frameworksモデルのインスタンス化
  $md = new Automatic_Scoring();
  // データ取得
  $data = $md->getData51();

  // ビューを返す
  return view('/result/result51', ['data' => $data]);
}
public function result52()
{
  // Frameworksモデルのインスタンス化
  $md = new Automatic_Scoring();
  // データ取得
  $data = $md->getData52();

  // ビューを返す
  return view('/result/result52', ['data' => $data]);
}
}
