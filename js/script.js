var app = new Vue({
    el: '#app',
    data: {
      
    },
    
    created() {
        axios 
            .get("http://localhost:8888/server/")
            .then(
                (response)=> {
                    console.log(response);
                }
            )
    }
    
  })