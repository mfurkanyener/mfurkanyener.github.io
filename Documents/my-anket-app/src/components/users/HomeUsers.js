import { BrowserRouter, Routes, Route, Link } from 'react-router-dom';
import React from "react";
import ListUsers from './ListUsers';
import CreateUsers from './CreateUsers';
import EditUsers from './EditUsers';
import UserLogin from './UsersLogin';
import SuperAdmin from './SuperAdmin';
import './HomeUsers.css';

function HomeUser() {
    return(
    <div className='HomeUserContainer'>
        <h5>React CRUD operations using PHP API and MySQL</h5>
  
  <BrowserRouter>
    <nav>
      <ul>
        <li>
          <Link to="user/list">List Users</Link>
        </li>
        <li>
          <Link to="user/create">Create User</Link>
        </li>
        <li>
          <Link to="user/login">Login User</Link>
        </li>
        <li>
          <Link to="user/superadmin">Login User</Link>
        </li>
      </ul>
    </nav>
    <Routes>
      <Route path="user/login" element={<UserLogin />} />
      <Route path="user/list" element={<ListUsers />} />
      <Route path="user/create" element={<CreateUsers />} />
      <Route path="user/superadmin" element={<SuperAdmin />} />
      <Route path="user/:id/edit" element={<EditUsers />} />
    </Routes>
  </BrowserRouter>

    </div>
    );
}
export default HomeUser;