import React from "react";
import "./SignIn.css";

function SignIn() {
    return (
        <div className="SignInContainer">
            <div className="SignInBody">
                <div className="SignInTop">
                    <h1>Giriş Yap</h1><br></br>
                    <p><a href="a.js"><i class="fa fa-github"></i></a></p>
                </div>
                <form className="SignInForm">
                    <input type='text' name='Username' placeholder="Kullanıcı Adı"></input>
                    <input type='password' name='Password' placeholder='Şifre'></input>
                    
                    <div className="SignInSubmit">
                        <input type="submit" name='SignIn' value="Giriş Yap"></input>
                    </div>
                    <p>Hesabınız yok mu ? <a href="a.js">Giriş Yap</a></p><br></br>
                </form>
            </div>
        </div>
    );
}
export default SignIn;