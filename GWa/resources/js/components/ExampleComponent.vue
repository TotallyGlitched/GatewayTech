<template>
    <div class="container">
        <ul v-scroll-spy-active="{selector: 'li.menu-item', class: 'custom-active'}" v-scroll-spy-link>
            <li>
                <a>Menu 1</a>
            </li>
            <li>
                <a>Menu 2</a>
            </li>
        </ul>
        <div v-scroll-spy>
            <div>
                <h1>Header 1</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia ut exercitationod quae pariatur necessitatibus praesentium non molestiae nisi omnis voluptates vel itore optio officia </p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
