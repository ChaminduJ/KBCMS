<template lang="html">
 <div class="is-pulled-right">
  <i class="fa fa-circle green" v-if="checkUser()"></i>
 </div>
</template>

<script>
  export default{
    props: ['receiver','onlineusers'],
    methods:{
      checkUser: function(){
        return _.find(this.onlineusers,{id: this.receiver.id});
      }
    }
  }
</script>

<style lang="css">
  .green{
    color: green;
  }
</style>
