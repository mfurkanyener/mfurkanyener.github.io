import { useState } from "react";
import axios from "axios";
import { useNavigate } from "react-router-dom";

function UsersLogin() {

    const navigate = useNavigate();
    const [inputs, setInputs] = useState({})

    const handleChange = (event) =>{
    const name = event.target.name;
    const value = event.target.value;
    setInputs(values => ({...values, [name]: value}));
    }

    const handleSubmit = (event) => {
        event.preventDefault();

        axios.post('http://localhost:80/api/user/loggedin', inputs).then(function(response){
            console.log(response.data);
            navigate('/user/home');
        });
        
    }

    return (
        <div>
            <h1>Login User</h1>
            <form onSubmit={handleSubmit}>
                <table cellSpacing="10">
                    <tbody>
                        <tr>
                            <th>
                                <label>Name: </label>
                            </th>
                            <td>
                                <input type="text" name="name" onChange={handleChange} />
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label>Mobile: </label>
                            </th>
                            <td>
                                <input type="text" name="mobile" onChange={handleChange} />
                            </td>
                        </tr>
                        <tr>
                            <td colSpan="2" align ="right">
                                <button>Save</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    );
}
export default UsersLogin;