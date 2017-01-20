<template>
    <div class="container">
      <form action="#">
        <p>Would you like to reserve a cabin or an RV space?
        </br>
          <input type="checkbox" id="rvSpace" />
          <label for="rvSpace">RV Space</label>
        </p>
        <p>
          <input type="checkbox" id="cabin" />
          <label for="cabin">Cabin</label>
        </p>
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