<template>
    <div>
        <v-card height="100%" elevation="24" class="rounded-lg px-4 py-7">
            <v-card-text>
                <Title />
                <Form />
                <div class="separator grey--text">or login with</div>
                <SocialMediaButtons />
            </v-card-text>
        </v-card>
    </div>
</template>

<script>
import Title from '~/components/Login/TitleLogin.vue'
import Form from '~/components/Login/FormLogin.vue'
import SocialMediaButtons from '~/components/Login/SocialMediaButtons.vue'

export default {
    components: {
        Title,
        Form,
        SocialMediaButtons,
    }
}
</script>

<style>
    .v-application .elevation-24 {
    box-shadow: 0px 11px 15px -7px #e4e4e4, 0px 24px 38px 3px #e4e4e4, 0px 9px 46px 8px #e4e4e4 !important;
}
</style>