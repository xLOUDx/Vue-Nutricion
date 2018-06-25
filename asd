import React, { Component } from 'react';
import { View, Text, Picker, StyleSheet } from 'react-native'

class PickerExample extends Component {
   state = {user: ''}
   updateUser = (user) => {
      this.setState({ user: user })
   }
   render() {
      return (
         <View style={ styles.container  }>
          
           <Text style = {styles.text}>{this.state.user}</Text>
      
            <View style={ styles.cordinates }> 
               <View style={{flex:1, backgroundColor: 'blue'}}> 
                <Picker 
            style={{ height: 150}} itemStyle={{height: 150}}
             selectedValue = {this.state.user} onValueChange = {this.updateUser}>
               <Picker.Item label = "Steve" value = "steve" />
               <Picker.Item label = "Ellen" value = "ellen" />
               <Picker.Item label = "Maria" value = "maria" />
               <Picker.Item label = "juan" value = "juan" />
               <Picker.Item label = "pepe" value = "pepe" />
               <Picker.Item label = "juanito" value = "juanito" />
               <Picker.Item label = "pedro" value = "pedro" />
               <Picker.Item label = "roberto" value = "roberto" />
               <Picker.Item label = "vianca" value = "vianca" />
               <Picker.Item label = "esteban" value = "esteban" />
               <Picker.Item label = "jaoquin" value = "jaoquin" />
               <Picker.Item label = "brayan" value = "brayan" />
            </Picker>
           </View>
           
           <View style={{flex: 1, backgroundColor: 'red'}}> 
                         <Picker selectedValue = {this.state.user} onValueChange = {this.updateUser}>
               <Picker.Item label = "Steve" value = "steve" />
               <Picker.Item label = "Ellen" value = "ellen" />
               <Picker.Item label = "Maria" value = "maria" />
               <Picker.Item label = "juan" value = "juan" />
               <Picker.Item label = "pepe" value = "pepe" />
               <Picker.Item label = "juanito" value = "juanito" />
               <Picker.Item label = "pedro" value = "pedro" />
               <Picker.Item label = "roberto" value = "roberto" />
               <Picker.Item label = "vianca" value = "vianca" />
               <Picker.Item label = "esteban" value = "esteban" />
               <Picker.Item label = "jaoquin" value = "jaoquin" />
               <Picker.Item label = "brayan" value = "brayan" />
            </Picker>
           </View>
           
           <View style={{flex: 1,heigh: 10, backgroundColor: 'green'}}> 
                           <Picker selectedValue = {this.state.user} onValueChange = {this.updateUser}>
               <Picker.Item label = "Steve" value = "steve" />
               <Picker.Item label = "Ellen" value = "ellen" />
               <Picker.Item label = "Maria" value = "maria" />
               <Picker.Item label = "juan" value = "juan" />
               <Picker.Item label = "pepe" value = "pepe" />
               <Picker.Item label = "juanito" value = "juanito" />
               <Picker.Item label = "pedro" value = "pedro" />
               <Picker.Item label = "roberto" value = "roberto" />
               <Picker.Item label = "vianca" value = "vianca" />
               <Picker.Item label = "esteban" value = "esteban" />
               <Picker.Item label = "jaoquin" value = "jaoquin" />
               <Picker.Item label = "brayan" value = "brayan" />
            </Picker>
           </View>
            </View>
         </View>
      )
   }
}
export default PickerExample

const styles = StyleSheet.create({
   text: {
      fontSize: 30,
      alignSelf: 'center',
      color: 'red'
   },
   container: {
    flex: 1,
    position: 'absolute',
    top: 0,
    left: 0,
    bottom: 50,
    right: 0,
    alignItems: 'center',
    justifyContent: 'flex-end',
   },
     cordinates: {
    flex: 1,
    position: 'absolute',
    top: 150,
    left: 0,
    bottom: 150,
    right: 0,
    flexDirection: 'row',
    justifyContent: 'space-between',
    alignItems: 'flex-end',
    padding: 30
  },
  probando: {
    height: 160
  }
})
