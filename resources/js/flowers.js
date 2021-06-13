let app = new Vue({
  el: '#root',
  data: {
    flowers: []
  },
  created() {
    axios.get('http://localhost:8000/api/flowers').then((response) => {
      this.flowers = response.data.data;
    })
  }
});
