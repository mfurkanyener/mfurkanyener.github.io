import React from "react";
import "../style/SignIn.css";

function SignIn(){
    return(
        <div className="SignIn">
            <div className="Text">
            <h1> Oturum Aç</h1>
            <p>Hoşgeldiniz!</p>
            
            </div>
            <div className="Form">
            <input type='text' placeholder="Email"></input>
            <input type='password'placeholder="Şifre"></input>
            <br></br>
            <button type='submit'>Oturum Aç</button>
            <br></br>
            <span>Hesabınız yok mu? <a href=""> Kayıt Ol!</a></span>
            <br/>
            </div>
        </div>
    );
    }
export default SignIn;