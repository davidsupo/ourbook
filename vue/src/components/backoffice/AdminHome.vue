<template>
    <div>
        <Navleft></Navleft>
        <router-view></router-view>
    </div>
</template>

<script>
import Navleft from './Navleft'
import Footer from './Footer'
export default {
  components:{Navleft,Footer},
 
}
</script>

<style>

</style>
