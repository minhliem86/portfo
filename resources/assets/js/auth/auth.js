import locationHelperBuilder from 'redux-auth-wrapper/history4/locationHelper'
import { connectedRouterRedirect } from 'redux-auth-wrapper/history4/redirect'
import connectedAuthWrapper from 'redux-auth-wrapper/connectedAuthWrapper'

import Loading from './Loading'

const locationHelper = locationHelperBuilder({})

const userIsAuthenticatedDefaults = {
    authenticatedSelector: state => state.loginReducer.isLogin,
    // authenticatingSelector: state => state.user.isLoading,
    wrapperDisplayName: 'UserIsAuthenticated'
}

export const userIsAuthenticated = connectedAuthWrapper(userIsAuthenticatedDefaults)

export const userIsAuthenticatedRedir = connectedRouterRedirect({
    ...userIsAuthenticatedDefaults,
    AuthenticatingComponent: Loading,
    redirectPath: '/react/login'
})

const userIsNotAuthenticatedDefaults = {
    // Want to redirect the user when they are done loading and authenticated
    // authenticatedSelector: state => state.user.data === null && state.user.isLoading === false,
    authenticatedSelector: state => !state.loginReducer.isLogin,
    wrapperDisplayName: 'UserIsNotAuthenticated'
}

export const userIsNotAuthenticated = connectedAuthWrapper(userIsNotAuthenticatedDefaults)

export const userIsNotAuthenticatedRedir = connectedRouterRedirect({
    ...userIsNotAuthenticatedDefaults,
    redirectPath: (state, ownProps) => locationHelper.getRedirectQueryParam(ownProps) || '/protected',
    allowRedirectBack: false
})