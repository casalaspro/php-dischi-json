const { createApp } = Vue;

createApp({
  data(){
    return{
      message: 'Ciao Dischi!',
      discs: [],
    }
  },
  created(){
    this.fetchData();
  },
  methods:{
    fetchData(){
      axios.get('./server.php').then((res) =>{
        // console.log(res.data);
        this.discs = res.data.results;
        console.log(this.discs);
      })
    }
  }
}).mount('#App')