<template>
  <div>
    <NavBar />
    <RecipeList :saved-recipes="savedRecipes" />
    <!-- <CreateCustomRecipe /> -->
  </div>
</template>

<script>
import NavBar from "../components/NavBar/NavBar";
import RecipeList from "../components/Recipe/RecipeList";
export default {
  name: "HomePage",
  components: {
    NavBar,
    RecipeList
  },
  computed: {
    savedRecipes() {
      return this.$store.getters.savedRecipes;
    }
  },
  created() {
    this.$store.dispatch("fetchRecipes");
  }
};
</script>
