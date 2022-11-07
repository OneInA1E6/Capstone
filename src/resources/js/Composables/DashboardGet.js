import axios from 'axios';

const dashboardGet = async (query) => {
  let res =  axios.get(route('dashboard.search', ({"query":query.query})))
  let resData = res.then(data => resData = data.data)
  return resData
}

export default dashboardGet