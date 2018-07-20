import Home from './components/Home';
import Dashboard from './components/backoffice/Dashboard';
import Compra from './components/frontoffice/Compra'
import Ingresando from './components/frontoffice/Ingresando'
import Libro from './components/frontoffice/Libro'
import Login from './components/frontoffice/Login'
import test from './components/frontoffice/tes'

export const routes= [
  {
    path:'/test',
    component:test
  },
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
    path:'/dashboard',
    component:Dashboard
  }
]