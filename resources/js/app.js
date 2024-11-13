import axios from 'axios';
import './bootstrap';

const deleteUser = async (id) => {
  await axios.delete('/users/' + id + '/delete')
  location.reload(true)
}

window.deleteUser = deleteUser