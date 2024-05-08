const { createApp } = Vue;

createApp({
  data(){
    return{
      message: 'Ciao Dischi!',
      discs: [],
      isSelectedAlbum: false,
      selectedAlbum: 0,

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
    },
    closeModal(){
      this.isSelectedAlbum = false;
      selectedAlbum = 0;
    },
    selectModal(index){
      this.selectedAlbum = index;
      this.isSelectedAlbum = true;
    }

  }
}).mount('#App')