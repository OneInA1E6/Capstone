import axios from 'axios';

const dashboardGet = async (query) => {
  console.log(query)
  let res = axios.get(route('dashboard.search', ({
    "query_address":query.query_address,
    "query_numRooms":query.query_numRooms
  })))
  let resData = res.then(data => resData = data.data)
  return resData
}

export default dashboardGet