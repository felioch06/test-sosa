<template>
    <div> 
        <h1 class="black--text bolder">Almost there! <br> <br> Update your data</h1>
        <h3 class=" grey--text pt-5">Don't need to update? <u @click="$router.push({path:'/'})" class="cursor-pointer purple-text">Go back</u> </h3>
    </div>
</template>

<style>
    .cursor-pointer{
        cursor: pointer;
    }
</style>