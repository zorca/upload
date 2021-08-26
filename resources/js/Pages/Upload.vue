<template>
  <app-layout>
      <form @submit.prevent="submit">
          <input type="text" name="name" v-model="form.name" />
          <input type="file" name="avatar" @input="form.avatar = $event.target.files[0]" />
          <progress v-if="form.progress" :value="form.progress.percentage" max="100">
              {{ form.progress.percentage }}%
          </progress>
          <button type="submit">Отправить</button>
      </form>
  </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout.vue'
export default {
    components: {
        AppLayout,
    },
    data() {
        return {
            form: this.$inertia.form({
                name: null,
                avatar: null,
            }),
        }
    },
    methods: {
        submit() {
            this.form.post('upload ')
        },
    },

}
</script>

<style scoped>

</style>
