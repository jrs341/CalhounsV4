<template>
    <div class="container">
    <div class="row"
        <form action="#">
          <p>Will any pets be staying with you?
          </br>
            <input type="checkbox" id="petYes" />
            <label for="petYes">Yes</label>
          </p>
          <p>
            <input type="checkbox" id="petNo" />
            <label for="petNo">No</label>
          </p>
        </form>
    </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component ready.')
        }
    }
</script>