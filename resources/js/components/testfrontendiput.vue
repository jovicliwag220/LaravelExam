<template>
<div>
    <input type="hidden" class="text-sm border-1" id="random" value="{{ $random }}" name="randominput">
    <input type="hidden" class="text-sm border-1" id="breakdown" value="{{ $breakdown }}" name="breakdowninput">
    <button class="border-1 hellobutton" type="submit">Create</button>
    <a href="{{url('/retrieve')}}" class="border-1 hellobutton" type="submit">Retrieve</a>
</div>
</template>

<script>
export default {
    mounted() {
        console.log('testinput component mounted.')
    }
}
</script>