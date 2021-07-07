var app = new Vue({
    el: '#app',
    data: {
      students: [],
    },
    
    created() {
        axios 
            .get("http://localhost:8888/server/")
            .then(
                (response)=> {
                    this.students = response.data;
                }
            )
    }
    
  })