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

import AdminHome from './components/backoffice/AdminHome'
import Inicio from './components/backoffice/Inicio'
import PerfilAdmin from './components/backoffice/PerfilAdmin'
import RegistrarAdmin from './components/backoffice/RegistrarAdmin'
import Clientes from './components/backoffice/Clientes'
import Categorias from './components/backoffice/Categorias'
import RegistrarCateg from './components/backoffice/RegistrarCateg'

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
  {
    path: '/admin',
    component: AdminHome,
    children:[
      {
        path:'',
        component: Inicio
      },
      {
        path: 'perfil',
        component: PerfilAdmin
      },
      {
        path: 'registrar',
        component: RegistrarAdmin
      },
      {
        path: 'clientes',
        component: Clientes
      },
      {
        path: 'categorias',
        component: Categorias
      },
      {
        path: 'registrarCategoria',
        component: RegistrarCateg
      },
    ]
  },

]