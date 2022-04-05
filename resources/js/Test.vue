<template>
    <h1>Test Component</h1>
    <div class="card">
        Lim is: {{lim}}
        User name : {{user}}
        Is Authenticated:  {{authenticated}}
    </div>
</template>
<script>
export default{
    data(){
        return{
            lim: 2,
            user:this.$store.state.auth.user,
            check:this.$store.state.auth.usercheck,
            authenticated:this.$store.state.auth.authenticated
        }
    }
}
</script>