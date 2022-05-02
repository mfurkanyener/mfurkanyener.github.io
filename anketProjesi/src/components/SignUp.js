import React from "react";
import "../style/SignUp.css";

function SignUp(){
    return(
        <div className="SignUp">
            <div className="Text">
            <h1>Kayıt Ol</h1>
            <p>Hoşgeldiniz!</p>
            
            </div>
            <div className="Form">
            <input type='text' placeholder="İsim"></input>
            <input type='text' placeholder="Soyisim"></input>
            <input type='text' placeholder="Kulanıcı Adı"></input>
            <input type='email' placeholder="Email"></input>
            <input type='password'placeholder="Şifre"></input>
            <input type='password'placeholder="Şifre(tekrar)"></input>
            <input type='date'placeholder="Doğum Tarihi"></input>
            <label>Cinsiyet</label>
            <input type='radio'placeholder="Kadın"></input>
            <input type='radio'placeholder="Erkek"></input>
            <select>
            <option selected>Şehir</option>
                <option>izmir</option>
                <option>manisa</option>
            </select>
            <br></br>
            <button type='submit'>Kayıt Ol</button>
            <br></br>
            <span>Hesabınız var mı? <a href="SignIn.js">Giriş Yap!</a></span>
            <br/>
            </div>
        </div>
    );
    }
export default SignUp;