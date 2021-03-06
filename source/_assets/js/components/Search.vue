<template>
    <div class="flex flex-1 justify-end items-center text-right px-4">
        <div
            class="absolute lg:relative w-full justify-end left-0 top-0 z-50 mt-7 lg:mt-0 px-4 lg:px-0"
            :class="{'hidden lg:flex': ! searching}"
        >
            <label for="search" class="hidden">Search</label>

            <input
                id="search"
                v-model="query"
                ref="search"
                class="transition-fast relative block h-10 w-full lg:w-1/5 xl:w-1/6 pl-3 lg:focus:w-1/2 text-white bg-transparent  border border-theme-light placeholder-theme-light focus:placeholder-white outline-none cursor-pointer"
                :class="{ 'transition-border': query }"
                autocomplete="off"
                name="search"
                placeholder="Search..."
                type="text"
                @keyup.esc="reset"
                @blur="reset"
            >

            <button
                v-if="query || searching"
                class="absolute top-0 right-0 leading-snug font-400 text-3xl text-theme-light hover:text-white focus:outline-none pr-7 lg:pr-3"
                @click="reset"
            >&times;</button>

            <transition name="fade">
                <div v-if="query" class="absolute left-0 right-0 lg:inset-auto w-full lg:w-1/2 text-left mb-4 lg:mt-10">
                    <div class="flex flex-col bg-gray-900 border border-b-0 border-t-0 border-theme-light rounded-b-lg shadow-lg mx-4 lg:mx-0">
                        <a
                            v-for="(result, index) in results"
                            class="bg-gray-900 text-xl cursor-pointer p-4"
                            :class="{ 'rounded-b-lg' : (index === results.length - 1) }"
                            :href="result.link"
                            :title="result.title"
                            :key="result.link"
                            @mousedown.prevent
                        >
                            {{ result.title }}

                            <span class="block font-normal text-theme-light opacity-50 text-xs my-1" v-html="result.snippet"></span>
                        </a>

                        <div
                            v-if="! results.length"
                            class="w-full border-b border-theme-light rounded-b-lg shadow cursor-pointer p-4"
                        >
                            <p class="my-0">No results for <strong>{{ query }}</strong></p>
                        </div>
                    </div>
                </div>
            </transition>
        </div>

        <button
            title="Start searching"
            type="button"
            class="flex lg:hidden justify-center items-center rounded-full focus:outline-none h-10 px-3"
            @click.prevent="showInput"
        >
            <img src="/assets/img/magnifying-glass.svg" alt="search icon" class="h-4 w-4 max-w-none">
        </button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            fuse: null,
            searching: false,
            query: '',
        };
    },
    computed: {
        results() {
            return this.query ? this.fuse.search(this.query) : [];
        },
    },
    methods: {
        showInput() {
            this.searching = true;
            this.$nextTick(() => {
                this.$refs.search.focus();
            })
        },
        reset() {
            this.query = '';
            this.searching = false;
        },
    },
    created() {
        axios('/index.json').then(response => {
            this.fuse = new fuse(response.data, {
                minMatchCharLength: 6,
                keys: ['title', 'snippet', 'categories'],
            });
        });
    },
};
</script>

<style>
input[name='search'] {
    background-image: url('/assets/img/magnifying-glass.svg');
    background-position: 0.8em;
    background-repeat: no-repeat;
    border-radius: 25px;
    text-indent: 1.2em;
}

input[name='search'].transition-border {
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    border-top-left-radius: .5rem;
    border-top-right-radius: .5rem;
}

.fade-enter-active {
    transition: opacity .5s;
}

.fade-leave-active {
    transition: opacity 0s;
}

.fade-enter,
.fade-leave-to {
    opacity: 0;
}
</style>
