import React from "react";
import "./SignUp.css";

function SignUp() {
    return (
        <div className="SignUpContainer">
            <div className="SignUpBody">
                <div className="SignUpTop">
                    <h1>Kayıt Ol</h1><br></br>
                    <p><a href="a.js"><i className="fa fa-github"></i></a></p>
                </div>
                <form className="SignUpForm">
                    <input type='text' name='Username' placeholder="Kullanıcı Adı"></input>
                    <input type='text' name='Name' placeholder="İsim"></input>
                    <input type='text' name='Surname' placeholder="Soyisim"></input>
                    <input type='email' name='Email' placeholder='Email'></input>
                    <input type='password' name='Password' placeholder='Şifre'></input>
                    <input type='password' name='PasswordConfirm' placeholder='Şifre (tekrar)'></input>

                    <div className="SignUpSubmit">
                        <input type="submit" name='SignUp' value="Kayıt Ol"></input>
                    </div>
                    <p>Hesabınız var mı? <a href="a.js">Giriş Yap</a></p><br></br>
                </form>
            </div>

        </div>
    );
}
export default SignUp;