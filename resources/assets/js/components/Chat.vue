<style scoped>
  .panel-block{
    flex-direction: column;
    border: none;
    max-height: 470px;
    /* height: 470px; */
  }
  .chat{
    width: 100%;
    padding: 20px;
    box-shadow: inset 0 0 20px 0 grey;
    margin-bottom: 20px;
    border: 1px solid grey;
    max-height: 600px;
    overflow-x: auto;
  }
  .chat .chat-right, .chat .chat-left{
    max-width: 70%;
    box-shadow: 0 0 8px 0px grey;
    padding: 8px;
    margin: 4px;
    display: inline-block;
  }
  .chat-right{
    float: right;
    background-color: yellow;
    border-radius: 5px;
  }
  .chat-left{
    float: left;
    background-color: green;
    border-radius: 5px;
  }
  .no-message{
    height: 200px;
    display: flex;
    align-items: center;
  }
</style>

<template>
    <div class="panel-block">
      <div class="chat" v-if="chats.length != 0">
        <div v-for="chat in chats" style="overflow: auto;">
          <div class="chat-right" v-if="chat.sent_user_id == userid">
            {{ chat.chat }}
          </div>
          <div class="chat-left" v-else>
            {{ chat.chat }}
          </div>
        </div>
      </div>
      <div v-else class="no-message">
        There are no message
      </div>
      <chat-composer v-bind:userid = "userid" v-bind:chats="chats" v-bind:receiverid="receiverid"></chat-composer>
    </div>
</template>

<script>
    export default {
    props:['chats','userid','receiverid']
    }
    
</script>
