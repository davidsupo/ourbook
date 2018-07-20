import Home from './components/Home';
import Compra from './components/frontoffice/Compra'
import Ingresando from './components/frontoffice/Ingresando'
import Libro from './components/frontoffice/Libro'
import Login from './components/frontoffice/Login'
import Alquilado from './components/frontoffice/Alquilados'
import Compartir from './components/frontoffice/Compartir'
import Compartidos from './components/frontoffice/Compartidos'
import Perfil from './components/frontoffice/Perfil'
import Categoria from './components/frontoffice/Categoria'

export const routes= [
  {
    path:'/',
    component:Home
  },
  {
    path:'/compra',
    component:Compra
  },
  {
    path:'/ingresando',
    component:Ingresando
  },
  {
    path:'/libro',
    component:Libro
  },
  {
    path:'/login',
    component:Login
  },
  {
    path: '/alquilados',
    component: Alquilado
  },
  {
    path: '/compartir',
    component: Compartir
  },
  {
    path: '/compartidos',
    component: Compartidos
  },
  {
    path: '/perfil',
    component: Perfil
  },
  {
    path: '/categoria',
    component: Categoria
  },

]