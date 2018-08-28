Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'some-tool',
            path: '/some-tool',
            component: require('./components/Tool'),
        },
    ])
})
