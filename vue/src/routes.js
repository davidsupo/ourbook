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
import LibrosStock from './components/backoffice/LibrosStock'
import EditarLibro from './components/backoffice/EditarLibro'
import RegistrarLibro from './components/backoffice/RegistrarLibro'
import LibrosAlquilados from './components/backoffice/LibrosAlquilados'
import DetalleLibroAlquilado from './components/backoffice/DetalleLibroAlquilado'
import LibrosCompartidos from './components/backoffice/LibrosCompartidos'

export const routes= [
  {
    path:'/',
    component:Home
  },
  {
    path:'/compra/:id',
    component:Compra,
    props:true
  },
  {
    path:'/ingresando',
    component:Ingresando
  },
  {
    path:'/libros/:id',
    component:Libro,
    props:true
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
    path: '/categoria/:id',
    component: Categoria,
    props:true
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
      {
        path: 'librosstock',
        component: LibrosStock
      },
      {
        path: 'editarlibro',
        component: EditarLibro
      },  
      {
        path: 'registrarlibro',
        component: RegistrarLibro
      },
      {
        path: 'librosalquilados',
        component: LibrosAlquilados
      },
      {
        path: 'detallelibroalquilado',
        component: DetalleLibroAlquilado
      },
      {
        path: 'libroscompartidos',
        component: LibrosCompartidos
      },
    ]
  },

]