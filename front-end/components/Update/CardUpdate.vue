<template>
    <div>
        <v-card height="100%" elevation="24" class="rounded-lg px-4 py-7">
            <v-card-text>
                <Title />
                <Form />
            </v-card-text>
        </v-card>
    </div>
</template>

<script>
import Title from '~/components/Update/TitleUpdate.vue'
import Form from '~/components/Update/FormUpdate.vue'

export default {
    components: {
    Title,
    Form,
  }
}
</script>