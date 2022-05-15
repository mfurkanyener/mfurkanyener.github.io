import React from 'react';
import './Homepage.css';

function Homepage() {
    return (
        <div className='Body'>
        <div className='HomepageContainer'>
            <div className='HomepageNav'>
                <a href='a.js' className='logo'>
                    <h1>anket</h1>
                </a>
                <input type='checkbox' id='toggler'></input>
                <label htmlFor='toggler'><i className="fa fa-bars"></i></label>
                <div className='menu'>
                    <ul className='list'>
                        <li><div class="dropdown">
                            <div class="dropbtn">anket <i class='fas fa-caret-down'></i></div>
                            <div class="dropdown-content">
                                <a href="#">Link 1</a>
                                <a href="#">Link 2</a>
                                <a href="#">Link 3</a>
                            </div>
                        </div></li>
                        <li>< a href='a.js'>nasıl çalışır</a></li>
                        <li>< a href='a.js'>hakımızda</a></li>
                        <li>< a href='a.js'>bize yazın</a></li>
                    </ul>
                </div>
                <div className='SignIn'><a href='Login' style={{ color: "#07a0c3" }}>Giriş Yap</a></div>
            </div>
            <div className='SurveySearch'>
                <div className='SearchSurvey'>
                    <h2>Kodunuz var mı? &nbsp;&nbsp;&nbsp;&nbsp;</h2><input type='text' placeholder=' #Kodu giriniz.'></input><a href='a.js'><i className='far fa-arrow-alt-circle-right righticon'></i>&nbsp;&nbsp;</a>
                </div>
            </div>
            <div className='HomepageSurveyBox'>
                <div className='SurveyBox'>
                    <h1 className='PAnketBaslik'>Populer Anketler</h1>
                    <div className='PAnket'>
                        <div className='LastAddedSurvery'>
                            Anket 1
                        </div>
                        <div className='LastAddedSurvery'>
                            Anket 2
                        </div>
                        <div className='LastAddedSurvery'>
                            Anket 3
                        </div>
                    </div>
                </div>
                <div className='SurveyBox'>
                    <h1 className='PAnketBaslik'>Son Eklenen Anket</h1>
                    <div className='PAnket'>
                        <div className='LastAddedSurvery'>
                            Anket 1
                        </div>
                        <div className='LastAddedSurvery'>
                            Anket 2
                        </div>
                        <div className='LastAddedSurvery'>
                            Anket 3
                        </div>
                    </div>
                </div>
            </div>
            <h1 className='HomepageSurveyPropertyTitle'>Özellikler</h1>
            <div className='HomepageSurveyProperty1'>
                <div className='SurveyImg1'>
                    <img src="https://via.placeholder.com/200x200" alt="Forest" />
                </div>
                <div className='SurveyProperty1'>
                    <h1>Özellik1</h1><br></br>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
            <div className='HomepageSurveyProperty2'>
                <div className='SurveyImg2'>
                    <img src="https://via.placeholder.com/200x200" alt="Forest" />
                </div>
                <div className='SurveyProperty2'>
                    <h1>Özellik2</h1><br></br>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
            <div className='HomepageSurveyComment'>
                <div className='SurveyComment'>
                    <div className="SignInTop">
                        <h1>Giriş</h1><br></br>
                        <p><a href="a.js"><i class="fa fa-github"></i></a></p>
                    </div>
                    <div className="SignInForm">
                        <p className="speech-bubble">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur erat lacus, pharetra quis mollis eget, tempor sit amet justo. Praesent in sem lorem. Sed convallis velit ut semper molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc dignissim finibus ipsum et ultrices.</p>
                    </div>
                </div>
                <div className='SurveyComment'>
                    <div className="SignInTop">
                        <h1>Giriş</h1><br></br>
                        <p><a href="a.js"><i class="fa fa-github"></i></a></p>
                    </div>
                    <div className="SignInForm">
                        <p className="speech-bubble">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur erat lacus, pharetra quis mollis eget, tempor sit amet justo. Praesent in sem lorem. Sed convallis velit ut semper molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc dignissim finibus ipsum et ultrices.</p>
                    </div>
                </div>
                <div className='SurveyComment'>
                    <div className="SignInTop">
                        <h1>Giriş</h1><br></br>
                        <p><a href="a.js"><i class="fa fa-github"></i></a></p>
                    </div>
                    <div className="SignInForm">
                        <p className="speech-bubble">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur erat lacus, pharetra quis mollis eget, tempor sit amet justo. Praesent in sem lorem. Sed convallis velit ut semper molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc dignissim finibus ipsum et ultrices.</p>
                    </div>
                </div>
            </div>
            
            
        </div>
        <div className='Footer'>
            <div className='HomepageFooter'>
                <div className='FooterBox'>
                    <div className='FooterTitle'><h1>SLOGAN</h1></div>
                </div>
                <div className='FooterBox'>
                    <div className='FooterTitle'><h4>Başlık 1</h4></div>
                    <div className='FooterUnderbox'><a href='a.js'>Menu 1</a></div>
                    <div className='FooterUnderbox'><a href='a.js'>Menu 2</a></div>
                </div>
                <div className='FooterBox'>
                    <div className='FooterTitle'><h4>Başlık 2</h4></div>
                    <div className='FooterUnderbox'><a href='a.js'>Menu 1</a></div>
                    <div className='FooterUnderbox'><a href='a.js'>Menu 2</a></div>
                </div>
                <div className='FooterBox'>
                    <div className='FooterTitle'><h4>Başlık 3</h4></div>
                    <div className='FooterUnderbox'><a href='a.js'>Menu 1</a></div>
                    <div className='FooterUnderbox'><a href='a.js'>Menu 2</a></div>
                </div>
            </div>
            <div className='FooterBottom'>
                <div className='Copyright'>
                <i class="fa fa-copyright"></i> Copyright anket <span>Furkan Doğancan İpek</span>
                </div>
            </div>
            </div>
        </div>
    );
}
export default Homepage;