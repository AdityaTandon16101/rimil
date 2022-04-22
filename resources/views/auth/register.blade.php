@extends('layouts.guest')

@section('title', "Join " . config('app.name') . " Now")

@push('css')
<style>
  .register-content{
    /*background-color: aqua;*/
    height: 420px;
    width: 100%;
    display: flex;
  }
  .div-content{
    /*background-color: blueviolet;*/
    height: 380px;
    width: 90%;
    margin-left: 5%;
    margin-top: 20px;
  }
  .main-div{
    /*background-color: rgb(29, 71, 57);*/
    height: 370px;
    width: 85%;
    margin-left: 8%;
    margin-top: 5px;
    border: 2px solid rgb(19, 77, 185);
    border-radius: 3px;
    background-color: orange;
  }
  .reg-label{
    background-color: rgb(19, 77, 185);
    height: 35px;
    width: 100%;
    text-align: center;
    border: 2px solid rgb(19, 77, 185);
    border-radius: 3px 3px 0px 0px;
  }
  .reg-label .reg-name-label{
    font-family: serif;
    font-size: 25px;
    padding-bottom: 5px;
    color: aliceblue;
  }
  .name-section{
    /*background-color: chartreuse;*/
    height: 50px;
    width: 100%;
    display: flex;
  }
  .name-label{
    /*background-color: cadetblue;*/
    height: 49px;
    width: 50%;
  }
  .name-input{
    /*background-color: chocolate;*/
    height: 49px;
    width: 50%;
  }
  .name-text-input{
    height: 30px;
    width: 250px;
    margin-left: 30px;
    margin-top: 8px;
    border: 1px solid gray;
    border-radius: 4px;
    background-color: whitesmoke;
  }
  .label-text{
    font-family: serif;
    font-size: 25px;
    margin-left: 300px;
  }


  .email-section{
    /*background-color: blue;*/
    height: 50px;
    width: 100%;
    display: flex;
  }
  .email-label{
    /*background-color: cadetblue;*/
    height: 49px;
    width: 50%;
  }
  .email-input{
    /*background-color: chocolate;*/
    height: 49px;
    width: 50%;
  }
  .email-text-input{
    height: 30px;
    width: 250px;
    margin-left: 30px;
    margin-top: 8px;
    border: 1px solid gray;
    border-radius: 4px;
    background-color: whitesmoke;
  }



  .number-section{
    /*background-color: chartreuse;*/
    height: 50px;
    width: 100%;
    display: flex;
  }
  .number-label{
    /*background-color: cadetblue;*/
    height: 49px;
    width: 50%;
  }
  .number-input{
    /*background-color: chocolate;*/
    height: 49px;
    width: 50%;
  }
  .number-text-input{
    height: 30px;
    width: 250px;
    margin-left: 30px;
    margin-top: 8px;
    border: 1px solid gray;
    border-radius: 4px;
    background-color: whitesmoke;
  }



  .password-section{
    /*background-color: rgb(12, 116, 67);*/
    height: 50px;
    width: 100%;
    display: flex;
  }
  .password-label{
    /*background-color: cadetblue;*/
    height: 49px;
    width: 50%;
  }
  .password-input{
    /*background-color: chocolate;*/
    height: 49px;
    width: 50%;
  }
  .password-text-input{
    height: 30px;
    width: 250px;
    margin-left: 30px;
    margin-top: 8px;
    border: 1px solid gray;
    border-radius: 4px;
    background-color: whitesmoke;
  }



  .re-password-section{
    /*background-color: rgb(54, 14, 119);*/
    height: 50px;
    width: 100%;
    display: flex;
  }
  .re-password-label{
    /*background-color: cadetblue;*/
    height: 49px;
    width: 50%;
  }
  .re-password-input{
    /*background-color: chocolate;*/
    height: 49px;
    width: 50%;
  }
  .re-password-text-input{
    height: 30px;
    width: 250px;
    margin-left: 30px;
    margin-top: 8px;
    border: 1px solid gray;
    border-radius: 4px;
    background-color: whitesmoke;
  }

  .submit{
    /*background-color: yellow;*/
    height: 50px;
    width: 100%;
  }
  .submit-btn{
    /*background-color: blueviolet;*/
    height: 40px;
    width: 30%;
    margin-left: 380px;
  }
  .submit-text{
    height: 38px;
    width: 150px;
    font-family: serif;
    font-size: 25px;
    text-align: center;
    background-color: rgb(19, 77, 185);
    color: white;
    border-radius: 3px;
    border: 2px solid rgb(19, 77, 185);
    margin-left: 60px;
  }

</style>
@endpush

@section('content')
<div class="register-content">
  <div class="div-content">
    <div class="main-div">
      <form>
        <div class="reg-label">
          <label class="reg-name-label">Registration</label>
        </div>


        <div class="name-section">
          <div class="name-label">
            <label class="label-text">Name</label>
          </div>
          <div class="name-input">
            <input class="name-text-input" name="" type="text">
          </div>
        </div>


        <div class="email-section">
          <div class="email-label">
            <label class="label-text">Email</label>
          </div>
          <div class="email-input">
            <input class="email-text-input" type="email">
          </div>
        </div>

        <div class="number-section">
          <div class="number-label">
            <label class="label-text">Number</label>
          </div>
          <div class="number-input">
            <input class="number-text-input" type="number">
          </div>
        </div>

        <div class="password-section">
          <div class="password-label">
            <label class="label-text">Password</label>
          </div>
          <div class="password-input">
            <input class="password-text-input" type="password">
          </div>
        </div>
        
        <div class="re-password-section">
          <div class="re-password-label">
            <label class="label-text">Re-Password</label>
          </div>
          <div class="re-password-input">
            <input class="re-password-text-input" type="password">
          </div>
        </div>

        <div class="submit">
          <div class="submit-btn">
            <button class="submit-text">Submit</button>
          </div>
        </div>
      </form>
    </div>
    </div>
  </div>
</div>
  @endsection