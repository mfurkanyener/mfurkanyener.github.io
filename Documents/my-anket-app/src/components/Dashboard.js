import React from 'react';
import './Dashboard.css';

function Dashboard() {
    return (
        <div className='DashboardContainer'>
            <div className='DashboardAside'>
                <input type='checkbox' id='AsideToggler'></input>
                <label htmlFor='AsideToggler'><i class="fa fa-sort-desc Desc"></i></label>
                <div className='DashboardAsideMenu'>
                    <h2><i class="fa fa-dashboard"></i> &nbsp;Anket Dashboard</h2>
                    <hr></hr>
                    <ul className='AsideNavbarList'>
                        <li><a href='a.js' className='active'><i class="fa fa-cubes"></i> &nbsp;Menu 1</a></li>
                        <li><a href='a.js'><i class="fa fa-cubes"></i> &nbsp;Menu 2</a></li>
                        <li><a href='a.js'><i class="fa fa-cubes"></i> &nbsp;Menu 3</a></li>
                        <li><a href='a.js'><i class="fa fa-cubes"></i> &nbsp;Menu 4</a></li>
                    </ul>
                    <div className='DashboardAsideMenuButton'>
                        <a href='a.js'>sjkldfhjksdjhfksfd</a>
                    </div>
                </div>

            </div>
            <div className='DashboardMain'>
                <div className='DashboardNavbar'>
                    <a href='a.js' className='DashboardNavbarLogo'>Logo</a>
                    <input type='checkbox' id='NavbarToggler'></input>
                    <label htmlFor='NavbarToggler'><i class="fa fa-bars"></i></label>
                    <div className='DashboardNavbarMenu'>
                        <ul className='DashboardNavbarList'>
                            <li><a href='a.js'>Menu 1</a></li>
                            <li><a href='a.js'>Menu 2</a></li>
                            <li><a href='a.js'>Menu 3</a></li>
                        </ul>
                    </div>
                </div>
                <div className='DashboardInfo'>
                    <div className='DashboardInfoBox'>
                        <i class="fa fa-user icon"></i>
                        <div className='DashboardInfoContent'>
                            <p>Users</p>
                            <p>27</p>
                        </div>
                        <hr></hr>
                        <div className='DashboardInfoFooter'>
                            <p>Content</p>
                        </div>
                    </div>
                    <div className='DashboardInfoBox'>
                        <i class="fa fa-user icon"></i>
                        <div className='DashboardInfoContent'>
                            <p>Users</p>
                            <p>27</p>
                        </div>
                        <hr></hr>
                        <div className='DashboardInfoFooter'>
                            <p>Content</p>
                        </div>
                    </div>
                    <div className='DashboardInfoBox'>
                        <i class="fa fa-user icon"></i>
                        <div className='DashboardInfoContent'>
                            <p>Users</p>
                            <p>27</p>
                        </div>
                        <hr></hr>
                        <div className='DashboardInfoFooter'>
                            <p>Content</p>
                        </div>
                    </div>
                </div>
                <div className='DashboardChartContainer'>
                    <div className='DashboardChartBox'>
                        <div className='DashboardChart'>
                            .
                        </div>
                        <div className='DashboardChartContent'>
                            <h3>Anket 1 Grafik 1</h3>
                            <p>Yazı İçeriği</p>
                        </div>
                        <hr></hr>
                        <div className='DashboardChartFooter'>
                            <i class="fa fa-clock-o"></i> 2 gün önce güncellendi
                        </div>
                    </div>
                    <div className='DashboardChartBox'>
                        <div className='DashboardChart'>
                            .
                        </div>
                        <div className='DashboardChartContent'>
                            <h3>Anket 1 Grafik 1</h3>
                            <p>Yazı İçeriği</p>
                        </div>
                        <hr></hr>
                        <div className='DashboardChartFooter'>
                            <i class="fa fa-clock-o"></i> 2 gün önce güncellendi
                        </div>
                    </div>
                    <div className='DashboardChartBox'>
                        <div className='DashboardChart'>
                            .
                        </div>
                        <div className='DashboardChartContent'>
                            <h3>Anket 1 Grafik 1</h3>
                            <p>Yazı İçeriği</p>
                        </div>
                        <hr></hr>
                        <div className='DashboardChartFooter'>
                            <i class="fa fa-clock-o"></i> 2 gün önce güncellendi
                        </div>
                    </div>
                </div>
                <div className='DashboardMixContainer'>
                    <div className='DashboardMixBoxContainer'>
                        <div className='DashboardMixBox'>
                            <h6>COMPANIES</h6>
                        </div>
                        <div className='DashboardMixBox'>
                            <i class="fa fa-asterisk"></i> Material UI XD Version
                        </div>
                        <div className='DashboardMixBox'>
                            <i class="fa fa-asterisk"></i> Add Progress Track
                        </div>
                        <div className='DashboardMixBox'>
                            <i class="fa fa-asterisk"></i> Fix Platform Errors
                        </div>
                        <div className='DashboardMixBox'>
                            <i class="fa fa-asterisk"></i> Launch our Mobile App
                        </div>
                        <div className='DashboardMixBox'>
                            <i class="fa fa-asterisk"></i> Add the New Pricing Page
                        </div>
                        <div className='DashboardMixBox'>
                            <i class="fa fa-asterisk"></i> Redesign New Online Shop
                        </div>
                    </div>
                    <div className='DashboardMixBoxContainer'>
                        <div className='DashboardMixBox'>
                            <h6>MEMBERS</h6>
                        </div>
                        <div className='DashboardMixBox'>
                            <i class="fa fa-american-sign-language-interpreting"></i> <i class="fa fa-anchor"></i> <i class="fa fa-archive"></i>
                        </div>
                        <div className='DashboardMixBox'>
                            <i class="fa fa-american-sign-language-interpreting"></i> <i class="fa fa-anchor"></i> <i class="fa fa-archive"></i>
                        </div>
                        <div className='DashboardMixBox'>
                            <i class="fa fa-american-sign-language-interpreting"></i> <i class="fa fa-anchor"></i> <i class="fa fa-archive"></i>
                        </div>
                        <div className='DashboardMixBox'>
                            <i class="fa fa-american-sign-language-interpreting"></i> <i class="fa fa-anchor"></i> <i class="fa fa-archive"></i>
                        </div>
                        <div className='DashboardMixBox'>
                            <i class="fa fa-american-sign-language-interpreting"></i> <i class="fa fa-anchor"></i> <i class="fa fa-archive"></i>
                        </div>
                        <div className='DashboardMixBox'>
                            <i class="fa fa-american-sign-language-interpreting"></i> <i class="fa fa-anchor"></i> <i class="fa fa-archive"></i>
                        </div>
                    </div>
                    <div className='DashboardMixBoxContainer'>
                        <div className='DashboardMixBox'>
                            <h6>BUDGET</h6>
                        </div>
                        <div className='DashboardMixBox'>
                            $ 14,000
                        </div>
                        <div className='DashboardMixBox'>
                            $ 3,000
                        </div>
                        <div className='DashboardMixBox'>
                            Not set
                        </div>
                        <div className='DashboardMixBox'>
                            $ 20,500
                        </div>
                        <div className='DashboardMixBox'>
                            $ 500
                        </div>
                        <div className='DashboardMixBox'>
                            $ 2,000
                        </div>
                    </div>
                    <div className='DashboardMixBoxContainer'>
                        <div className='DashboardMixBox'>
                            <h6>COMPLETION</h6>
                        </div>
                        <div className='DashboardMixBox'>
                            -
                        </div>
                        <div className='DashboardMixBox'>
                            -
                        </div>
                        <div className='DashboardMixBox'>
                            -
                        </div>
                        <div className='DashboardMixBox'>
                            -
                        </div>
                        <div className='DashboardMixBox'>
                            -
                        </div>
                        <div className='DashboardMixBox'>
                            -
                        </div>
                    </div>
                </div>
                <div class='DashboardFooter'>
                    <div className='DashboardFooterIcon'>
                        Logo
                    </div>
                    <div className='DashboardFooterContent'>
                        <i class="fa fa-copyright"></i> 2022 Copyright: anket.tech
                    </div>
                    <div className='DashboardFooterCopyright'>
                        <a href='a.js'><i class="fa fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    );
}
export default Dashboard;