<template>
	<div>
		<h1>About</h1>
		<h4>Vuex</h4>
		<p>State - message: <b>{{message}}</b></p>
	</div>
</template>

<script>
export default {
	computed: {
		message() {
			return this.$store.state.message;
		}
	}
};
</script>