import { App } from '@inertiajs/inertia-react'
import React from 'react'
import { InertiaProgress } from '@inertiajs/progress';
import { render } from 'react-dom'


InertiaProgress.init({
    color: '#ED8936',
    showSpinner: true
});

const el = document.getElementById('app')

render(
  <App
    initialPage={JSON.parse(el.dataset.page)}
    resolveComponent={name => import(`./Pages/${name}`).then(module => module.default)}
  />,
  el
)