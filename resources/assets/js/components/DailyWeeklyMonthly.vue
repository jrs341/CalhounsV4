<template>
    <div class="container">
        <form action="#">
          <p>How would you like to rent the cabin or RV space?
          </br>
            <input type="checkbox" id="daily" />
            <label for="daily">Nightly</label>
          </p>
          <p>
            <input type="checkbox" id="weekly" />
            <label for="weekly">Weekly</label>
          </p>
          <p>
            <input type="checkbox" id="monthly" />
            <label for="monthly">Monthly</label>
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