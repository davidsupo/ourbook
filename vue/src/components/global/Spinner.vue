<template lang="pug">
  .Spinner    
</template>

<script>
export default {

}
</script>

<style>
.Spinner {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  position: absolute;
  border: 10px solid #eee;
  display: inline-block;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}
.Spinner:after, .Spinner:before {
    content: '';
    display: block;
    width: 100px;
    height: 100px;
    border-radius: 50%;
  }
  
  .Spinner:after {
    position: absolute;
    top: -10px;
    left: -10px;
    border: 10px solid transparent;    
    animation: spin 1s linear infinite, color 6s ease-in-out infinite;
  }

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  
  100% {
    transform: rotate(360deg);
  }
}
@keyframes color {
  100%,
  0% {
    border-top-color:#d62d20;
  }
  40% {
    border-top-color:#0057e7;
    
  }
  66% {
    border-top-color:#008744;
  }
  80%,
  90% {
     border-top-color:#ffa700;
  }
}

</style>
