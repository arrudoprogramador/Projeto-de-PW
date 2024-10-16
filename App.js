import React, {useState} from 'react';
import {View, StyleSheet, Pressable, Image, Text} from 'react-native';

export default function App(){
  return (

    <View style={styles.pai}>
      <View style={styles.title}>
        <Text style={styles.title}>Bem vindo à Nubank!</Text>
      </View>
   

    <View style={styles.app}>

      <Pressable style={styles.box1}>
        Me Ajuda
      </Pressable>

      <Pressable style={styles.box2}>
        <View>
          <Image source={{ uri: 'img/cartoes.png'}} style={styles.image2} />
        </View>
        <View>
          Ativar Cartão
        </View>
      </Pressable>

      <Pressable style={styles.box3}>
      <Image source={{ uri: 'img/transferir.png'}} style={styles.image} />
        Transferir
      </Pressable>

      <Pressable style={styles.box4}>
        Depositar
      </Pressable>

    </View>

    </View>

  );
}

  const styles = StyleSheet.create({
    pai: {
      flex: 1,
      backgroundColor: '#6C22A6',
    },

    title: {
      flex: 1,
      alignItems: 'center',
      marginTop: 10,
      color: 'white',
      fontSize: 30,
      fontWeight: 20,
    },

    app: {
      flex: 1,
      flexDirection: 'row',
      justifyContent: 'space-between',
      alignItems: 'end',
      
      fontSize: 25,
      padding: 18,
      fontFamily: 'arial',
    },

    box1: {
      width: 130,
      height: 150,
      borderRadius: 10,
      backgroundColor: '#b703ff',
      color: 'white',
      fontSize: 22,
      justifyContent: 'end',
      textAlign: 'left',
      padding: 10,
    },

    box2: {
      width: 130,
      height: 150,
      borderRadius: 10,
      backgroundColor: '#b703ff',
      color: 'white',
      fontSize: 22,
      textAlign: 'left',
      justifyContent: 'end',
      padding: 10,

    },

    box3: {
      width: 130,
      height: 150,
      borderRadius: 10,
      backgroundColor: '#b703ff',
      color: 'white',
      fontSize: 22,
      textAlign: 'left',
      justifyContent: 'end',
      padding: 10,
      
    },

    box4: {
      width: 130,
      height: 150,
      borderRadius: 10,
      backgroundColor: '#b703ff',
      color: 'white',
      justifyContent: 'end',
      padding: 10,
      fontSize: 22,
    
    },

    image: {
      width: 113, 
      height: 100, 
      marginBottom: 5, 
      borderRadius: 8,
    },

    image2: {
      width: 109,
      height: 75, 
      marginBottom: 5, 
      borderRadius: 8,
    }


});
