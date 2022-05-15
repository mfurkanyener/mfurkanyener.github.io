import axios from "axios"
import { useEffect, useState } from "react";
//import { Link } from "react-router-dom";
import './SuperAdmin.css';
//tarafsız gerçek

function SuperAdmin() {

    const [users, setUsers] = useState([]);
    useEffect(() => {
        getUsers();
    }, []);

    function getUsers() {
        axios.get('http://localhost:80/api/users/').then(function (response) {
            console.log(response.data);
            setUsers(response.data);
        });
    }

    const deleteUser = (id) => {
        axios.delete(`http://localhost:80/api/user/${id}/delete`).then(function (response) {
            console.log(response.data);
            getUsers();
        });
    }
    return (
        <div className='DashboardContainer'>
            <div className='BaslikContainer'>
                <div className='Baslik'><h1>Super Admin Paneli</h1></div>
                <div className='Button'>
                    <div className='DashboardAsideMenuButton'>
                        <a href='a.js'>Çıkış Yap</a>
                    </div>
                </div>
            </div>
            <div className='AdminRequest'>
                <h2>Admin Listesi</h2>
                <hr></hr>
                <div className="DataTitle">
                    <div className="ColumData">İsim</div>
                    <div className="ColumData">Soyisim</div>
                    <div className="ColumData">Kullanıcı Adı</div>
                    <div className="ColumData">E-Mail</div>
                    <div className="ColumData">Oluşturma Tarihi</div>
                    <div className="ColumData">Aksiyon</div>
                </div>
                {users.map((user, key) =>
                    <div className="TableData" key={key}>
                        <div className="ColumData">{user.name}</div>
                        <div className="ColumData">{user.surname}</div>
                        <div className="ColumData">{user.username}</div>
                        <div className="ColumData">{user.email}</div>
                        <div className="ColumData">{user.create_date}</div>
                        <div className="ColumData">
                            <div className="ButtonData">
                                <button type='submit' className='Onay'><i className="fa fa-edit edit"></i> Düzenle</button>&nbsp;
                                <button type='submit' className='Ret'><i className="fa fa-trash-o trash"></i> Sil</button>
                            </div>
                        </div>
                    </div>
                )}
            </div>
            </div>
            );
}
export default SuperAdmin;