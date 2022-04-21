@extends('layouts.app')

@push('css')
    <style>
      .content{
          background-color: aqua;
          width: 100%;
          height: 100%;
      }
      .login-content{
          background-color: rgb(108, 112, 111);*/
          width: 100%;
          height: 600px;
          display: flex;
      }
      .login-content .content-section{
          background-color: rgb(255, 255, 255);
          height: 350px;
          width: 60%;
          margin-left: 280px;
          margin-top: 100px;
          border-radius: 6px;
          border: 2px solid rgb(28, 112, 168)
      }
      .content-section .login-text{
          background-color: rgb(28, 112, 168);
          height: 50px;
          width: 100%;
          border-radius: 6px;
      }
      .login-text .text{
          text-align: left;
          color: aliceblue;
          font-family: serif;
          font-size: 32px;
          margin-left: 10px;
      }
      .input-data{
         /* background-color: brown;*/
          width: 100%;
          height: 280px
      }
      .form-input{

      }
      .email-section{
          /*background-color: aqua;*/
          height: 80px;
          width: 100%;
          display: flex;
      }
      .email-section .email-sec-div{
          /*background-color: aquamarine;*/
          height: 40px;
          width: 50%;
          margin-top: 20px;
      }
      .email-sec-div .email-label{
          text-align: center;
          color: gray;
          font-family: serif;
          font-size: 25px;
          margin-left: 100px;
      }
      .email-section .email-input{
         /* background-color: yellow;*/
          height: 40px;
          width: 50%;
          margin-top: 20px;
      }
      .email-input .email-intext{
          height: 35px;
          width: 300px;
          border-radius: 6px;
          margin-top: 2px;
          margin-left: 50px;
      }





      .pass-section{
        /*background-color: aqua;*/
        height: 100px;
        width: 100%;
        display: flex;
      }
      .pass-section .pass-sec-div{
        /*background-color: aquamarine;*/
        height: 40px;
        width: 50%;
        margin-top: 20px;
      }
      .pass-sec-div .password-label{
          text-align: center;
          color: gray;
          font-family: serif;
          font-size: 25px;
          margin-left: 100px;
      }
      .pass-section .pass-input{
         /* background-color: yellow;*/
          height: 40px;
          width: 50%;
          margin-top: 20px;
      }
      .pass-input .pass-intext{
          height: 35px;
          width: 300px;
          border-radius: 6px;
          margin-top: 2px;
          margin-left: 50px;
      }
      .login{
          /*background-color: aqua;*/
          height: 100px;
          width: 100%;
      }
      .login .login-btn{
          color: aliceblue;
          background-color: rgb(18, 121, 168);
          font-family: serif;
          font-size: 25px;
          margin-left: 320px;
          width: 150px;
          border-radius: 4px;
      }
    </style>
@endpush



@section('content')

  
  
    <div class="login-content">
  
      <div class="content-section">
            
            <div class="login-text">
                <label for="" class="text">Login</label>
            </div>
            <div class="input-data">
              <form class="form-input">
                  <div class="email-section">
                      <div class="email-sec-div">
                        <label class="email-label">Email Address</label>
                      </div>
                    <div class="email-input">
                      <input class="email-intext" type="email" name="" >
                    </div>
                  </div>

                <div class="pass-section">
                    <div class="pass-sec-div">
                        <label class="password-label">Password</label>
                    </div>
                    <div class="pass-input">
                        <input class="pass-intext" type="password" name="">
                    </div>
                </div>

                <div class="login">
                    <button class="login-btn">Login</button>
                </div>
              </form>
            </div>
  
    </div>
  </div>

@endsection
