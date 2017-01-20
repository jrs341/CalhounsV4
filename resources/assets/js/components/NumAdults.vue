<template>
    <div class="container">
      <form action="#">
        <div class="input-field col s4 m2">
          <select>
            <option value="" disabled selected>Choose number of adults</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
          <label>How many adults per cabin or RV space over 18 are in your group?</label>
        </div>
        <div class="input-field col s4 m2">
          <select>
            <option value="" disabled selected>Choose number of children</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
          <label>How many children per cabin or RV space are in your group?</label>
        </div>
      </form>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component ready.')
        }
    }
</script>