import React from "react"
import * as ReactDOMClient from 'react-dom/client';
import App from './App'

const container = document.createElement( 'div' );
container.setAttribute( 'id', 'root' );

const body = document.getElementsByTagName( 'body' );

if ( body.length ) {
    body[0].append( container );
}

const root = ReactDOMClient.createRoot( container );
root.render( <App /> );