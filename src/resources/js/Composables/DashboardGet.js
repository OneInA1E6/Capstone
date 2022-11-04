import axios from 'axios';

const dashboardGet = async (query) => {
  console.log(query)
  let res =  axios.get(route('accommodations.test', query))
  let resData = res.then(data => resData = data)
  return resData
}

export default dashboardGet