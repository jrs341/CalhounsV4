<template>
    <div class="container">
      <form action="#">
        <div class="input-field col s4 m2">
          <select>
            <option value="" disabled selected>Choose a breed</option>
            <option>Pit Bull Terriers</option>
          <option>Staffordshire Terriers</option>
          <option>Rottweilers</option>
          <option>German Shepherds</option>
          <option>Presa Canarios</option>
          <option>Chows Chows</option>
          <option>Doberman Pinschers</option>
          <option>Akitas</option>
          <option>Wolf-hybrids</option>
          <option>Mastiffs</option>
          <option>Cane Corsos</option>
          <option>Alaskan Malamutes</option>
          <option>Siberian Huskies</option>
          <option>Other</option>
          </select>
          <label>Are any of the dogs pure bred or mixed with any of the following breeds?</label>
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