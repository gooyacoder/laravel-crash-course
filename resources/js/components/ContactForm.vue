<template>
    <div class="container">

      <div class="col-5 mx-auto">
        <form action="/contact-us/sendmessage" method="post" class="needs-validation">

        

          <div class="form-group p-2">
            <label for="name">Name:</label>
            <input type="text" class="form-control" placeholder="Please enter your name" name="name">
          </div>
          <div class="form-group p-2">
            <label for="email">Email address:</label>
            <input type="text" class="form-control" placeholder="Please enter your email" name="email">
          </div>
          <div class="form-group p-2">
            <label for="message">Message:</label>
            <textarea placeholder="Please enter your message here" rows="8" class="form-control" name="message"></textarea>
          </div>

          <button type="submit" class="btn btn-primary m-2">Submit</button>
        </form>
      </div>

    </div>
</template>
<script>
export default {
    data(){
        return{
            loaded: false
        }
    },
    mounted() {
        
    },
    methods: {
        
    },
}
</script>