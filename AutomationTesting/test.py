def decode(message_file):
    """
    Decode a message from a file.

    Args:
        message_file (str): Path to the message file.

    Returns:
        str: Decoded message.
    """
    with open(message_file, 'r') as file:
        lines = file.readlines()

    decoded_message = []
    pyramid_numbers = set()

    for line in lines:
        parts = line.split()
        try:
            number = int(parts[0])
            pyramid_numbers.add(number)
        except ValueError:
            pass

    sorted_numbers = sorted(pyramid_numbers)

    for number in sorted_numbers:
        try:
            decoded_message.append(lines[number - 1].split()[1])
        except IndexError:
            pass

    return ' '.join(decoded_message)

def find_repeated_words(string):
    # Create a set of all the words in the string.
    words = set(string.split())

    # Iterate over the set of words.
    for word in words:
        # Count the number of times the word appears in the string.
        count = string.count(word)

        # Print the word and the number of times it appears.
        if count > 1:
            print(f"{word}: {count}")

file_path = 'coding_qual_input.txt'  # Replace with the actual path to your message file
decoded_result = decode(file_path)
find_repeated_words(decoded_result)
print(decoded_result)