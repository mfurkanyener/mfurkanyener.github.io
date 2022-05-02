import React from "react";
import "../style/Main.css";

function Sidebar(){
    return(
        <div className="Container">
            <div className="Sidebar">
                <h1>Admin Paneli</h1>
                <hr></hr>
                <div className="Menu">
                    <ul>
                        <li><a href=""><i class="fa fa-home"></i> Anasayfa</a></li>
                        <li><a href=""><i class="fa fa-bar-chart"></i> Rapor</a></li>
                        <li><a href="">Kullanıcı</a></li>
                        <li><a href="">Anket</a></li>
                    </ul>
                </div>
                <div className="CikisYap"><a href="">Çıkış Yap</a></div>
            </div>
            <div className="Homepage">
                <div className="Navbar">
                    <div className="Left">
                        <label>/Panel</label>
                        <br/>
                        <label className="label"><i class="fa fa-home"></i> Anasayfa</label>
                    </div>
                    <div className="Right">
                        <ul>
                            <li><input type="text" placeholder="Arama"></input></li>
                            <li><a href="profile">Profile</a></li>
                            <li><a href="setting">Ayar</a></li>
                            <li><a href="notification">Bildirim</a></li>
                        </ul>
                    </div>
                </div>
                <div className='boxCont'>
                <div className="box">
                    <div className="lrInfo">
                        <div className="lInfo">
                            <span>icon</span>
                        </div>
                        <div className="rInfo">
                        <label>Kullanıcı</label>
                        <br/>
                        <label className="label"> 281</label>
                        </div>
                    </div>
                    <div><hr></hr></div>
                    <div className="bInfo">
                        <span>asağı</span>
                    </div>
                </div>
                <div className="box">
                    <div className="lrInfo">
                        <div className="lInfo">
                            <span>sol</span>
                        </div>
                        <div className="rInfo">
                            <span>sağ</span>
                        </div>
                    </div>
                    <div><hr></hr></div>
                    <div className="bInfo">
                        <span>asağı</span>
                    </div>
                </div>  
                <div className="box">
                    <div className="lrInfo">
                        <div className="lInfo">
                            <span>sol</span>
                        </div>
                        <div className="rInfo">
                            <span>sağ</span>
                        </div>
                    </div>
                    <div><hr></hr></div>
                    <div className="bInfo">
                        <span>asağı</span>
                    </div>
                </div>              
                </div>
            </div>
        </div>
    );
}
export default Sidebar;