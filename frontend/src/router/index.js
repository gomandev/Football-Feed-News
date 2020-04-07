import Vue from 'vue'
import Router from 'vue-router'
import BlogFeed from '@/components/BlogFeed'
import BlogList from '@/components/BlogList'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'feed',
      component: BlogFeed
    },
    {
      path: '/blog',
      name: 'blog',
      component: BlogList
    }
  ]
})
